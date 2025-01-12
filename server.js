// server.js
const express = require("express");
const cors = require("cors");
const bodyParser = require("body-parser");
const sqlite3 = require("sqlite3").verbose();

const app = express();
const port = 3000;

// Veritabanı bağlantısı
const db = new sqlite3.Database("vegatable.db", (err) => {
  if (err) {
    console.error("Veritabanı bağlanamadı: " + err.message);
  } else {
    console.log("Veritabanına bağlandı.");
  }
});

// Middleware
app.use(cors());
app.use(bodyParser.json());
app.use(express.static("public")); // Statik dosyalar için

// Veritabanında 'users' tablosu oluşturulması (ilk başta çalıştırılmalı)
db.serialize(() => {
  db.run(
    "CREATE TABLE IF NOT EXISTS users (id INTEGER PRIMARY KEY AUTOINCREMENT, username TEXT, email TEXT, password TEXT)"
  );
});

// Ana sayfa isteği için yanıt
app.get("/", (req, res) => {
  res.send("Hoş geldiniz! Vegatable API çalışıyor.");
});

// Vegatable API endpoint
app.get("/api/vegatables", (req, res) => {
  res.json({
    message: "Vegatable API'ye hoş geldiniz!",
    data: [
      { id: 1, name: "Havuç", type: "Sebze", price: 5 },
      { id: 2, name: "Ispanak", type: "Sebze", price: 10 },
      { id: 3, name: "Domates", type: "Meyve", price: 7 },
    ],
  });
});

// Kullanıcı kaydı API endpoint'i
app.post("/api/register", (req, res) => {
  const { username, email, password } = req.body;

  const stmt = db.prepare(
    "INSERT INTO users (username, email, password) VALUES (?, ?, ?)"
  );
  stmt.run(username, email, password, function (err) {
    if (err) {
      res.status(500).json({ message: "Kullanıcı kaydedilemedi.", error: err });
    } else {
      res
        .status(201)
        .json({ message: "Kullanıcı kaydedildi!", userId: this.lastID });
    }
  });
  stmt.finalize();
});

// Sunucuyu başlat
app.listen(port, () => {
  console.log(`Sunucu http://localhost:${port} adresinde çalışıyor!`);
});
