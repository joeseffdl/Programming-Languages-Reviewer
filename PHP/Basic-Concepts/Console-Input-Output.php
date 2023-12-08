<?php 
print "Enter length: ";
fscanf(STDIN, "%d\n", $inputVariableA); //fscanf - accepts input from the stream. STDIN - Standard Input. Scanner function similar to C
echo "Enter breadth: ";
fscanf(STDIN, "%d\n", $inputVariableB);
$outputVariable = $inputVariableA * $inputVariableB;
fprintf(STDOUT, "Area of rectangle is %d\n", $outputVariable); //fprintf - prints the output to the stream. STDOUT - Standard Output
?>