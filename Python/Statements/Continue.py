for letter in "Python":
    if letter == "h":
        continue
    print ("Current letter: ", letter)
    
var = 10
while var > 0:
    print ("Current variable value: ", var)
    var = var -1
    if var == 5:
        continue
    print("The current value of var is", var)
    
pwd = "password"

while True:
    x = input("Enter the password: ")
    if x == pwd:
        print("Password accepted")
        break
    else:
        print("Wrong password")
        continue