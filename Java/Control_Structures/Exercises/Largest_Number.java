package Java.Control_Structures.Exercises;

import java.util.Scanner;

public class Largest_Number {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int a, b, c;
        
        System.out.println("Enter three numbers: ");
        a = input.nextInt();
        b = input.nextInt();
        c = input.nextInt();
        
        if (a > b && a > c) {
            System.out.printf("The largest number is %d\n", a);
        } else if (b > a && b > c) {
            System.out.printf("The largest number is %d\n", b);
        } else {
            System.out.printf("The largest number is %d\n", c);
        }
    }
}
