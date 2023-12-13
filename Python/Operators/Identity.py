x = 12
y = x # y is a copy of x
print("x=", x, ":", id(x), "y=", y, ":", id(y)) # id() returns the identity of an object

if ( x is y ):
    print("x and y have same identity")
else:
    print("x and y do not have same identity")
    
if ( id(x) == id(y) ):
    print("x and y have same identity")
else:
    print("x and y do not have same identity")
    
y = 30
print("x=", x, ":", id(x), "y=", y, ":", id(y))

if ( x is y ):
    print("x and y have same identity")
else:
    print("x and y do not have same identity")
