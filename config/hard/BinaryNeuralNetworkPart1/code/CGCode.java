import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int inputs = in.nextInt();
        int outputs = in.nextInt();
        int hiddenLayers = in.nextInt();
        int testInputs = in.nextInt();
        int trainingExamples = in.nextInt();
        int trainingIterations = in.nextInt();
        for (int i = 0; i < hiddenLayers; i++) {
            int nodes = in.nextInt();
        }
        in.nextLine();
        for (int i = 0; i < testInputs; i++) {
            String testInput = in.nextLine();
        }
        for (int i = 0; i < trainingExamples; i++) {
            String trainingInputs = in.next();
            String expectedOutputs = in.next();
        }
        for (int i = 0; i < testInputs; i++) {

            // Write an answer using System.out.println()
            // To debug: System.err.println("Debug messages...");

            System.out.println("answer");
        }
    }
}