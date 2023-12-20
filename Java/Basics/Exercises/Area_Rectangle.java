package Java.Basics.Exercises;

import java.util.*;

public class Area_Rectangle {
    public static void main(String[] args) {
        Scanner input = new Scanner(System.in);
        double area, length, breadth;
        System.out.println("Enter length and breadth: ");
        length = input.nextDouble();
        breadth = input.nextDouble();
        area = length * breadth;
        System.out.println("Area: " + area);
    }
}
