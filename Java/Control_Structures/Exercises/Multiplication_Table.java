package Java.Control_Structures.Exercises;

import java.util.Scanner;

public class Multiplication_Table {
    public static void main(String[] args) {
        System.out.print("Enter a number: ");
        int input = new Scanner(System.in).nextInt();

        for (int i = 1; i <= 10; i++) {
            System.out.printf("Mutiples of %d -- %d x %d = %d\n", input, i, input, i * input);
        }
    }
}
