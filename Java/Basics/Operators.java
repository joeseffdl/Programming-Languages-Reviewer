package Java.Basics;

// Operators are used to perform operations on variables and values.
// Java divides the operators into the following groups:
// - Arithmetic operators ( +, -, *, /, %, ++, -- )
// - Assignment operators ( =, +=, -=, *=, /=, %=, &=, ^=, |=, <<=, >>=, >>>= )
// - Comparison operators ( ==, !=, >, <, >=, <= )
// - Logical operators ( &&, ||, ! )
// - Bitwise operators ( &, |, ^, ~, <<, >>, >>> )

// Order of operations:
// 1. Postfix (expression++, expression--)
// 2. Unary (++expression, --expression, +expression, -expression, ~, !)
// 3. Multiplicative (*, /, %)
// 4. Additive (+, -)
// 5. Shift (<<, >>, >>>)
// 6. Relational (<, >, <=, >=, instanceof)
// 7. Equality (==, !=)
// 8. Bitwise AND (&)
// 9. Bitwise XOR (^)
// 10. Bitwise OR (|)
// 11. Logical AND (&&)
// 12. Logical OR (||)
// 13. Ternary (boolean expression ? expression1 : expression2)
// 14. Assignment (=, +=, -=, *=, /=, %=, &=, ^=, |=, <<=, >>=, >>>=)

public class Operators {
    public static void main(String[] arguments) {
        double score = 1.0 + 2.0 * 3.0 / 4.0;
        System.out.println("score: " + score);
        
    }
}
