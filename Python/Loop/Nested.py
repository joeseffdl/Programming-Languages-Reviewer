for i in range(1,11):
    print("Range value", f"{i}:")
    for j in range(1,11):
        k = i * j
        print(k, end=" ") # end=" " is used to print the output in a single line
    print()