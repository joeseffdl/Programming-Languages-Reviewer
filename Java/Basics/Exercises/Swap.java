package Java.Basics.Exercises;

class Swap {
    public static void main(String[] args) {
        int a = 1, b = 2;
        int temp;
        System.out.println("Values before swapping - " + "a: " + a + " b: " + b);
        
        temp = a;
        a = b;
        b = temp;
        
        System.out.println("Values after swapping - " + "a: " + a + " b: " + b);
    }
}
