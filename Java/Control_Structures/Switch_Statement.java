package Java.Control_Structures;

// Syntax
// switch(expression) {
//     case x:
//         // code block
//         break;
//     case y:
//         // code block
//         break;
//     default:
//         // code block
// }

public class Switch_Statement {
    public static void main(String[] args){
        String x = "A";
        switch (x) {
            case "A":
            case "E":
            case "I":
            case "O":
            case "U":
                System.out.println("Vowel");
                break;
            default:
                System.out.println("Consonant");
        }
    }
}
