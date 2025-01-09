const express = require('express');
const mongoose = require('mongoose');
const bodyParser = require('body-parser');
const bcrypt = require('bcryptjs');
const jwt = require('jsonwebtoken');
const cors = require('cors');

const app = express();
app.use(bodyParser.json());
app.use(cors());

// Connect to MongoDB
mongoose.connect('mongodb://localhost:27017/Vegetable-', {
  useNewUrlParser: true,
  useUnifiedTopology: true,
}).then(() => console.log('Database connected successfully!'));

// User schema
const userSchema = new mongoose.Schema({
  name: String,
  email: String,
  password: String,
  role: String, // 'seller' or 'customer'
});

const User = mongoose.model('User', userSchema);

// Register
app.post('/register', async (req, res) => {
  const { name, email, password, role } = req.body;

  // Hash the password
  const hashedPassword = await bcrypt.hash(password, 10);
  const user = new User({ name, email, password: hashedPassword, role });
  
  await user.save();
  res.send({ message: 'Registration successful!' });
});

// Login
app.post('/login', async (req, res) => {
  const { email, password } = req.body;
  const user = await User.findOne({ email });

  if (!user) return res.status(400).send({ message: 'User not found!' });

  const isValid = await bcrypt.compare(password, user.password);
  if (!isValid) return res.status(400).send({ message: 'Invalid password!' });

  const token = jwt.sign({ id: user._id, role: user.role }, 'secretkey');
  res.send({ message: 'Login successful!', token });
});

// Start the server
app.listen(3000, () => console.log('Server running on port 3000!'));
