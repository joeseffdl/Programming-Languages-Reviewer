package Java.Control_Structures.Exercises;

import java.util.Scanner;

public class Palindrome {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        int number, sum = 0, remainder, temp;

        System.out.println("Enter any number: ");
        number = input.nextInt();
        temp = number;
        
        while (number > 0) {
            remainder = number % 10;
            System.out.println("r: " + remainder);
            sum = (sum * 10) + remainder;
            System.out.println("sum: " + sum);
            number = number / 10;
            System.out.println("n: " + number);
        }
        if(sum == temp) {
            System.out.println("Palindrome number");
        } else {
            System.out.println("Not palindrome");
        }
    }    
}
