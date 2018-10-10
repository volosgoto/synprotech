var nodemailer = require('nodemailer');
nodemailer.SMTP = {
   host: 'mail.yourmail.com',
   port: 25,
   use_authentication: true,
   user: 'info@youdomain.com',
   pass: 'somepasswd'
 };

var message = {   
      sender: "sender@domain.com",    
      to:'somemail@somedomain.com',   
      subject: '',    
      html: '<h1>test</h1>',  
      attachments: [  
      {   
          filename: "somepicture.jpg",    
          contents: new Buffer(data, 'base64'),   
          cid: cid    
      }   
      ]   
  };

  nodemailer.send_mail(message,   
    function(err) {   
      if (!err) { 
          console.log('Email send ...');
      } else console.log(sys.inspect(err));       
  });


// class Ui{
//   // showAlert(message, className) {
//   //   // Create div
//   //   const div = document.createElement('div');
//   //   // Add classes
//   //   div.className = `alert ${className}`;
//   //   // Add text
//   //   div.appendChild(document.createTextNode(message));
//   //   // Get parent
//   //   const container = document.querySelector('.container');
//   //   // Get form
//   //   const form = document.querySelector('#book-form');
//   //   // Insert alert
//   //   container.insertBefore(div, form);

//   //   // Timeout after 3 sec
//   //   setTimeout(function(){
//   //     document.querySelector('.alert').remove();
//   //   }, 3000);
//   // }


//   clearFields(){
//   }
// }

// class Validator{
//   constructor(){
//     this.name = document.getElementById('name').addEventListener('blur', this.validateName);
//     this.email = document.getElementById('email').addEventListener('blur', this.validateEmail);
//     this.phone = document.getElementById('phone').addEventListener('blur', this.validatePhone);
//     this.message = document.getElementById('message').addEventListener('blur',this.validatePhone);
//   }


//   validateName() {
//     let name = this.name;
//     console.log(name);
//     let re = /^[a-zA-Z]{2,10}$/i;

//     if (!re.test(name.value)) {
//         name.classList.add('is-invalid');
//         console.log('valid');
        
//     } else {
//         name.classList.remove('is-invalid');
//     }
//   }

  
//   validateEmail() {
//     let email = document.getElementById('email');
//     console.log(email);
//     // let re = /^([a-zA-Z_\-\.]+)@([a-zA-Z_\-\.]+)\.([a-zA-Z]{2,5})$/;
//     let re = /^([\w\-\.]+)@([\w\-\.]+)\.([a-zA-Z]{2,5})$/;

//     if (!re.test(email.value)) {
//         email.classList.add('is-invalid');
//     } else {
//         email.classList.remove('is-invalid');
//     }
//   }

  
//   validatePhone() {
//     let phone = document.getElementById('phone');
//     console.log(phone);

//     let re = /^\(?\d{3}\)?[-. ]?\d{3}[-. ]?\d{4}$/;
 
//     if (!re.test(phone.value)) {
//         phone.classList.add('is-invalid');
//     } else {
//         phone.classList.remove('is-invalid');
//     }
//   }


//   validateMessage() {
//     let message = document.getElementById('message');
//     console.log(message);
    
//     let re = /^[a-zA-Z]{2,10}$/i;

//     if (!re.test(name.value)) {
//         name.classList.add('is-invalid');
//     } else {
//         name.classList.remove('is-invalid');
//     }
//   }


// }




// Event Listener for name

// Event Listener for add book

// document.getElementById('email-form').addEventListener('submit', function(e){
//   // Get form values
//   const author = document.getElementById('name').value,
//         email = document.getElementById('email').value,
//         message = document.getElementById('message').value;
// }