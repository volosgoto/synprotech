// // class Mail {
//   var nodemailer = require('nodemailer');

//   var transporter = nodemailer.createTransport({
//     service: 'gmail',
//     auth: {
//       user: 'youremail@gmail.com',
//       pass: 'yourpassword'
//     }
//   });
  
//   var mailOptions = {
//     from: 'youremail@gmail.com',
//     to: 'myfriend@yahoo.com',
//     subject: 'Sending Email using Node.js',
//     text: 'That was easy!'
//   };
  
//   transporter.sendMail(mailOptions, function(error, info){
//     if (error) {
//       console.log(error);
//     } else {
//       console.log('Email sent: ' + info.response);
//     }
//   });

// // }

// class Ui{
//   showAlert(){}
//   clearFields(){

//   }
// }

class Validator{
  validateEmail() {
    let email = document.getElementById('email');
    console.log(email);
    // let re = /^([a-zA-Z_\-\.]+)@([a-zA-Z_\-\.]+)\.([a-zA-Z]{2,5})$/;
    let re = /^([\w\-\.]+)@([\w\-\.]+)\.([a-zA-Z]{2,5})$/;

    if (!re.test(email.value)) {
        email.classList.add('is-invalid');
    } else {
        email.classList.remove('is-invalid');
    }
  }

   validatePhone() {
    let phone = document.getElementById('phone');
    let re = /^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/;
 
    if (!re.test(phone.value)) {
        phone.classList.add('is-invalid');
    } else {
        phone.classList.remove('is-invalid');
    }
}


  validateName() {
    let name = document.getElementById('name');
    console.log(name);
    let re = /^[a-zA-Z]{2,10}$/i;
 
    if (!re.test(name.value)) {
        name.classList.add('is-invalid');
    } else {
        name.classList.remove('is-invalid');
    }
}

validateMessage() {
  let message = document.getElementById('message');
  console.log(message);
  
  let re = /^[a-zA-Z]{2,10}$/i;

  if (!re.test(name.value)) {
      name.classList.add('is-invalid');
  } else {
      name.classList.remove('is-invalid');
  }
}

}

