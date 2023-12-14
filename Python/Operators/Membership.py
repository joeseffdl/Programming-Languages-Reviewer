x = 10
y = 2
list = [1, 2, 3, 4, 5 ]
print("List: ", list)
print("x = ", x, "y = ", y)

if ( x in list ):
    print("Line 1 - x is available in the given list")
else:
    print("Line 1 - x is not available in the given list")
    
if ( y not in list ):
    print("Line 2 - y is not available in the given list")
else:
    print("Line 2 - y is available in the given list")
    


