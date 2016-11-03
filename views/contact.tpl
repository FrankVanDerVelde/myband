
<section>

<style>
input, select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 100%;
    background-color: gray;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: black;
}

div {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	background-color: darkgrey;
	border: 2px solid black;
}
	
textarea {
    width: 100%;
    height: 150px;
    padding: 12px 20px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    background-color: #f8f8f8;
    font-size: 16px;
    resize: none;
}
	</style>



<h3 id="contactHead">Vul dit contact form in en wij reageren zo spoedig mogelijk.</h3>

<div>
  <form action="action_page.php">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname">

    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname">
	  
	  <label for="email">Email</label>
    <input type="email" id="email" name="Email">

	  <label for="cellphone">Celphone number</label>
    <input type="number" id="cellphone" name="cellphone">

    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="Nederland">Netherlands</option>
      <option value="Amerika">America</option>
      <option value="Duitsland">Germany</option>
		<option value="Belgie">Belgium</option>
		<option value="Frankrijk">France</option>
    </select>
	  
	  <label for="onderwerp">Onderwerp</label>
    <select id="onderwerp" name="onderwerp">
      <option value="League">I have a question about the game League of Legends.</option>
      <option value="Riot">I have a question about riot games.</option>
      <option value="Opmerking">I have a compliment or tip.</option>
		<option value="Overig">Other questions</option>
    </select>
  
    <input type="submit" value="Submit">
	 <textarea></textarea>
  </form>
</div>




</section>