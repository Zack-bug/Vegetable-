document
  .getElementById("signup-form")
  .addEventListener("submit", async function (event) {
    event.preventDefault(); // Formun varsayılan gönderilmesini engelle

    // Alanları alalım
    var firstname = document.getElementById("firstname").value;
    var lastname = document.getElementById("lastname").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var phoneNumber = document.getElementById("Phone_number").value;
    var gender = document.getElementById("gender").value;
    var agreeTerms = document.getElementById("agree-terms").checked;

    // Kontrolleri yapalım
    if (
      !firstname ||
      !lastname ||
      !email ||
      !password ||
      !phoneNumber ||
      !gender ||
      !agreeTerms
    ) {
      alert("Please fill in all fields and agree to the terms and conditions.");
      return; // Formu göndermemek için
    }

    // Form verilerini backend'e gönderelim
    const response = await fetch("http://localhost:3000/api/register", {
      method: "POST",
      headers: {
        "Content-Type": "application/json",
      },
      body: JSON.stringify({
        username: firstname + " " + lastname,
        email: email,
        password: password,
        phone: phoneNumber,
        usage_type: gender,
      }),
    });

    const data = await response.json();
    if (response.ok) {
      alert("Kullanıcı başarıyla kaydedildi!");
      // Başarılı işlemden sonra başka bir sayfaya yönlendirebilirsiniz
      window.location.href = "Homepage.html";
    } else {
      alert(`Hata: ${data.message}`);
    }
  });
