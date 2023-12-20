package Java.Control_Structures;

// Syntax
// while (condition) {
//     // code block to be executed
// }

public class While_Loop {
    public static void main(String[] args) {
        int i = 0;
        while (i < 5) {
            // Print values using formatted strings
            System.out.printf("Current count value: %d\n", i);
            i++;
        }
        System.out.println("Loop ended");
    }
}
