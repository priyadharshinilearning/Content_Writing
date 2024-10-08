<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="stylesheet" href="css/register.css" />
  </head>
  <body>
    <section class="container">
      <header>Registration Form</header>
      <form action="authentication/registration.php" method="POST" class="form">
      <div class="column">
          <div class="input-box">
          <label>Full Name</label>
          <input type="text" name="fname" placeholder="Enter full name" required />
          </div>
          <div class="input-box">
          <label>User Name</label>
          <input type="text" name="uname" placeholder="Enter User name" required />
          </div>
       </div>

      <div class="column">
          <div class="input-box">
          <label>Email Address</label>
          <input type="email" name="email" placeholder="Enter email address" required />
          </div>
          <div class="input-box">
          <label>Password</label>
          <input type="password" name="pass" placeholder="Enter password" required />
          </div>
       </div>

        <div class="column">
          <div class="input-box">
            <label>Phone Number</label>
            <input type="number" name="ph" placeholder="Enter phone number" required />
          </div>
          <div class="input-box">
            <label>Birth Date</label>
            <input type="date" name="dob" placeholder="Enter birth date" required />
          </div>
        </div>
        <div class="gender-box">
          <h3>Gender</h3>
          <div class="gender-option">
            <div class="gender">
              <input type="radio" id="check-male" value="male" name="gender" checked />
              <label for="check-male">male</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-female" value="female" name="gender" />
              <label for="check-female">Female</label>
            </div>
            <div class="gender">
              <input type="radio" id="check-other" value="prefernottosay" name="gender" />
              <label for="check-other">prefer not to say</label>
            </div>
          </div>
        </div>
        <div class="input-box address">
          <label>Choose yours</label>
          <div class="column">
            <div class="select-box">
              <select name="category-1">
                <option hidden> Category - 1</option>
                <option value="writer">Writer</option>
                <option value="reader">Reader</option>
                <option value="jury">Jury</option>
              </select>
            </div>
            <div class="select-box">
              <select name="category-2">
                <option hidden>Category - 2</option>
                <option value="shortstory writer">ShortStory Writer</option>
                <option value="poem writer">Poem Writer</option>
                <option value="Article writer">Article Writer</option>
              </select>
            </div>
          </div>
        </div>
        <button>Submit</button>
      </form>
    </section>
  </body>
</html>