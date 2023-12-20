package Java.Control_Structures;

// Syntax
// if (condition1) {
//     // code block to be executed if condition1 is true
// } else if (condition2) {
//     // code block to be executed if the condition1 is false and condition2 is true
// } else {
//     // code block to be executed if the condition1 is false and condition2 is false
// }

public class ElseIf_Ladder {
    public static void main(String[] args) {
        int num = 1234;
        if (num < 100 && num >= 1) {
            System.out.println("It is a two digit number");
        } else if (num < 1000 && num >= 100) {
            System.out.println("It is a three digit number");
        } else if (num < 10000 && num >= 1000) {
            System.out.println("It is a four digit number");
        } else if (num < 100000 && num >= 10000) {
            System.out.println("It is a five digit number");
        } else {
            System.out.println("Number is not between 1 & 99999");
        }
    }
}
