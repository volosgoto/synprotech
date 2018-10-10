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

// class Validator{



// validateEmail() {
//   let email = document.getElementById('email');
//   // let re = /^([a-zA-Z_\-\.]+)@([a-zA-Z_\-\.]+)\.([a-zA-Z]{2,5})$/;
//   let re = /^([\w\-\.]+)@([\w\-\.]+)\.([a-zA-Z]{2,5})$/;

//   if (!re.test(email.value)) {
//       email.classList.add('is-invalid');
//   } else {
//       email.classList.remove('is-invalid');
//   }
// }
// }


alert ('Hello from Sendmail.js' )