package Java.Control_Structures;

// Syntax
// do {
//     // code block to be executed
// } while (condition);

public class Do_While_Loop {
    public static void main(String[] args) {
        int i = 0;
        do {
            // Print values using formatted strings
            System.out.printf("Current count value: %d\n", i);
            i++;
        } while (i < 5);
        System.out.println("Loop ended");
    }    
}
