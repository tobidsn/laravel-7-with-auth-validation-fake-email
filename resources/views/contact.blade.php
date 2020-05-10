<!DOCTYPE html>
<html>
<head>
    <title>Contact Us</title>
</head>
<body>
    <form action ="{{ url('contact') }}" method ="POST">
     @csrf
     <table>
        <tr>
           <td>Name</td>
           <td><input type="text" name="name"/></td>
        </tr>
        <tr>
           <td>Email</td>
           <td><input type="email" name="email"/></td>
        </tr>
        <tr>
           <td>Message</td>
           <td><textarea name="message"></textarea></td>
        </tr>
        <tr>
           <td></td>
           <td>
              <input type="SUBMIT" value="Send"/>
           </td>
        </tr>
     </table>
  </form>
</body>
</html>