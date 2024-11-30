<?php
echo<<< ME
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form</title>
  </head>
  <style>
    div {
      margin: 0 auto;
      width: 400px;
    }
    form {
      /* background: linear-gradient( */
      /* to right,
        rgb(204, 122, 241),
        rgb(111, 237, 251)
      ); */
      background-color: white;
      color: black;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
      padding: 20px 40px;
      border-radius: 10px;
    }
    input {
      outline: none;
      border: none;
      /* width: 80%; */
      border-radius: 5px;
      padding: 10px;
      /* color: white; */
      background: transparent;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    input::placeholder {
      color: black;
      font-weight: 600;
    }

    .sm {
      background: linear-gradient(to right, rgb(92, 229, 7), green);
      color: white;
      text-transform: capitalize;
      width: 48%;
      /* font-size: 16px; */
    }

    .sm:disabled {
      background: grey;
      cursor: not-allowed;
      color: white;
    }
    .rs {
      background: linear-gradient(to right, rgb(251, 54, 54), rgb(160, 3, 3));
      color: white;
      text-transform: capitalize;
      margin-top: 10px;
      width: 48%;
    }
    select {
      outline: none;
      border: none;
      border-radius: 5px;
      padding: 10px;
      /* color: rgb(255, 255, 255); */
      background: transparent;
      box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
    }
    /* option {
      /* background-color: rgb(153, 43, 226); 
    } */
    .d {
      width: 100%;
    }
    .d input {
      width: 95%;
    }
  </style>
  <body bgcolor="grey">
    <div>
      <form action="#" name="form">
        <h1 style="text-align: center">Login Form</h1>
        <div class="d">
          <input
            type="text"
            name="nam"
            id="name"
            placeholder="Enter your name"
            onchange="myname()"
            oninput="formValidatiy()"
          />
          <span style="display: none; margin-top: 10px" id="alert"
            >Name will be 20 character..</span
          >
        </div>
        <br /><br />
        <div class="d">
          <input
            type="text"
            name="email"
            id="mail"
            placeholder="Enter your email"
            onblur="myemail()"
            oninput="formValidatiy()"
          />
          <span style="display: none; margin-top: 10px" id="emerroe"
            >Enter a valid email..</span
          >
        </div>
        <br /><br />
        <div class="d">
          <input
            type="text"
            name="pass"
            id="pass"
            placeholder="Enter your pass"
            onblur="myepass()"
            oninput="formValidatiy()"
          />
          <span style="display: none; margin-top: 10px" id="merroe"
            >Enter a Strong password..</span
          >
        </div>
        <br /><br />
        <select name="course" id="course" oninput="formValidatiy()">
          <option value="SSC">Select your Cirtificat</option>
          <option value="SSC">SSC</option>
          <option value="HSC">HSC</option>
          <option value="BSC">BSC</option>
          <option value="MSC">MSC</option></select
        ><br /><br />
        Gender:
        <input
          oninput="formValidatiy()"
          type="radio"
          name="Gender"
          value="Male"
        />Male
        <input
          oninput="formValidatiy()"
          type="radio"
          name="Gender"
          value="FeMale"
        />FeMale <br /><br />
        Skills:
        <!-- <input type="checkbox" name="skill" />JAVA -->
        <input
          oninput="formValidatiy()"
          type="checkbox"
          name="skill"
          value="HTML"
        />HTML
        <input
          oninput="formValidatiy()"
          type="checkbox"
          name="skill"
          value="PHP"
        />PHP
        <input
          oninput="formValidatiy()"
          type="checkbox"
          name="skill"
          value="JS"
        />JS <br /><br />
        <input
          class="sm"
          type="submit"
          value="submit"
          name="submit"
          disabled
          onclick="myform()"
        />
        <input
          class="rs"
          type="reset"
          value="reset"
          name="reset"
          onclick="myrest()"
        />
      </form>
    </div>

    <!-------------------------- chadgpt_modify_code -------------------->
    <script>
      function myrest() {
        setTimeout(formValidatiy, 0);
      }
      function myname() {
        const name = document.getElementById("name");
        const chack = document.getElementById("alert");
        const checkname = /^[A-Za-z ]{4,20}$/;
        const submitBtn = document.querySelector(".sm");

        if (!checkname.test(name.value)) {
          chack.style.display = "block";
          chack.style.color = "red";
          name.style.border = "2px solid red";
          submitBtn.disabled = true; // Disable submit button if name is invalid
        } else {
          chack.style.display = "none";
          name.style.border = "2px solid green";
          // Call form validation to check the overall state
        }
        formValidatiy();
      }

      function myemail() {
        let mail = document.getElementById("mail");
        let mailerroe = document.getElementById("emerroe");
        const submitBtn = document.querySelector(".sm");
        let mailcheck = /^[^ ]+@[^ ]+\.[a-z]{2,4}$/;

        if (!mailcheck.test(mail.value)) {
          mailerroe.style.display = "block";
          mailerroe.style.color = "red";
          mail.style.border = "2px solid red";
          submitBtn.disabled = true; // Disable submit button if email is invalid
        } else {
          mailerroe.style.display = "none";
          mail.style.border = "2px solid green";
          // Call form validation to check the overall state
        }
        formValidatiy();
      }
      function myepass() {
        let pass = document.getElementById("pass");
        let mailerroe = document.getElementById("merroe");
        const submitBtn = document.querySelector(".sm");
        let mailcheck =
          /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;

        if (!mailcheck.test(pass.value)) {
          mailerroe.style.display = "block";
          mailerroe.style.color = "red";
          pass.style.border = "2px solid red";
          submitBtn.disabled = true; // Disable submit button if email is invalid
        } else {
          mailerroe.style.display = "none";
          pass.style.border = "2px solid green";
          // Call form validation to check the overall state
        }
        formValidatiy();
      }

      function formValidatiy() {
        const name = document.getElementById("name").value.trim();
        const email = document.getElementById("mail").value.trim();
        const course = document.getElementById("course").value.trim();
        const pass = document.getElementById("pass").value.trim();
        const gender = document.querySelector('input[name="Gender"]:checked');
        const skill = document.querySelector('input[name="skill"]:checked');
        const submitBtn = document.querySelector(".sm");
        let mailerroe = document.getElementById("emerroe");
        const chack = document.getElementById("alert");

        submitBtn.disabled = !(
          name &&
          email &&
          course &&
          skill &&
          gender &&
          pass &&
          mailerroe.style.display === "none" &&
          chack.style.display === "none"
        );
      }

      function myform() {
        var nam = document.form.nam.value;
        var email = document.form.email.value;
        var course = document.form.course.value;
        var gender = document.form.Gender.value;
        var skill = "";
        for (i = 0; i < document.form.skill.length; i++) {
          if (document.form.skill[i].checked) {
            skill += document.form.skill[i].value + " ,";
          }
        }
        doc = open("", "", "width=400px,height=400px, top=100px,left=100px");
        with (doc.document) {
          write("<body style='background-color:skyblue;padding:50px'>");
          write(
            "<div style='background-color:white;border-radius: 5px;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; padding:20px'>"
          );
          write("Name:" + nam + "<br><br>");
          write("Email:" + email + "<br><br>");
          write("Course:" + course + "<br><br>");
          write("Gender:" + gender + "<br><br>");
          write("Skills:" + skill + "<br><br>");
          write(
            "<input style='background-color:green;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;color:white;margin-right:40px;border:none;border-radius: 5px; padding:10px'  type='button' value='Close me'  onclick='self.close()'>"
          );
          write(
            "<input style='background-color:red;box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;color:white;border:none;border-radius: 5px; padding:10px' type='button' value='Print me'  onclick='self.print()'>"
          );
        }
      }
    </script>
  </body>
</html>

ME;

?>