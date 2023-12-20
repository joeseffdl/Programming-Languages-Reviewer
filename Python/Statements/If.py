discount = 0
amount = int(input("Enter amount: "))
if amount > 1000:
    discount = amount * 0.1
    print("Discount", discount)
print("Net payable:", amount - discount)