name = "Hozier"
print("Hello, %s!" % name) # %s is a placeholder for a string variable called "name" that is passed into the string after the % symbol

age = 25
print("%s is %d years old." % (name, age)) # %d is a placeholder for a decimal variable called "age" that is passed into the string after the % symbol
print("%o is %s's age in octal form." % (age, name)) # %o is a placeholder for an octal variable called "age" that is passed into the string after the % symbol
print("%x is %s's age in hexadecimal form." % (age, name)) # %x is a placeholder for a hexadecimal variable called "age" that is passed into the string after the % symbol
print("%e is %s's age in scientific notation." % (age, name)) # %e is a placeholder for a scientific notation variable called "age" that is passed into the string after the % symbol

marks = 97.5
print("%s scored %f percent in the exam." % (name, marks)) # %f is a placeholder for a float variable called "marks" that is passed into the string after the % symbol

