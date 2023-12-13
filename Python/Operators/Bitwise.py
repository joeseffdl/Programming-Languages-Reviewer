x = 60 # 60 = 0011 1100
y = 13 # 13 = 0000 1101
z = 0
print("x = ", x, ":", bin(x), "y = ", y, ":", bin(y))

# Binary AND
z = x & y # 12 = 0000 1100
print("Binary AND of x and y is equal to z: ", z, ":", bin(z))

# Binary OR
z = x | y # 61 = 0011 1101
print("Binary OR of x and y is equal to z: ", z, ":", bin(z))

# Binary XOR
z = x ^ y # 49 = 0011 0001
print("Binary XOR of x and y is equal to z: ", z, ":", bin(z))

# Binary Ones Complement
z = ~x # -61 = 1100 0011
print("Binary Ones Complement of x is equal to z: ", z, ":", bin(z))

# Binary Left Shift
z = x << 2 # 240 = 1111 0000
print("Binary Left Shift of x is equal to z: ", z, ":", bin(z))

# Binary Right Shift
z = x >> 2 # 15 = 0000 1111
print("Binary Right Shift of x is equal to z: ", z, ":", bin(z))

