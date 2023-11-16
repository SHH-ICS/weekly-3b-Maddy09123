<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
    <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
    <title>Welcome Page</title>
  </head>
  print("Place pizza")
print("Menu")
print("Large Pizza: $6.00")
print("Extra Large pizza: $10.00")
print("Toppings: 1 = $1.00, 2 = $1.75, 3 = $2.50, 4 = $3.35")
print("Order")
size = input("Which pizza would you like")

price_pizza = [6.0,10.0]
price_toppings = [1.0, 1.75, 2.5, 3.35]
sub_total = 0.00

if str(size) == 'L' or str(size) == 'XL':
    toppings = input("How many toppings? Type a number 1-4")
    if int(toppings) > 4:
        print("Please choose 1-4 toppings")
    elif int(toppings) < 1:
        print("Please choose 1-4 toppings")
    else:
        print("You have chosen", size, "pizza and", toppings, "toppings!")
        if str(size) == 'L':
            sub_total = price_pizza[0]
        elif str(size) == 'XL':
            sub_total = price_pizza[1]

        if int(toppings) == 1:
            sub_total = sub_total + price_toppings[0]
        elif int(toppings) == 2:
            sub_total = sub_total + price_toppings[1]
        elif int(toppings) == 3:
            sub_total = sub_total + price_toppings[2]
        elif int(toppings) == 4:
            sub_total = sub_total + price_toppings[3]
else:
    print("Please choose either a L or XL pizza.")

taxes = float(sub_total) * 0.13
total_price = float(sub_total) + taxes
print("Your order summary:")
print("Sub total: $",format(sub_total, ".2f"), "Taxes: $",format(taxes, ".2f"), "Amount due: $",format(total_price, ".2f"))
  <body>
    
    <?php
    $myVariable = "";
    if ( isset( $_POST['myVariable'] ) ){
      $myVariable = $_POST['myVariable'];
    }
    echo "<h1>My Program</h1>\n";
    echo "<p>My Variable is = ".$myVariable."</p>\n";
    ?>
    
  </body>
  
</html>
