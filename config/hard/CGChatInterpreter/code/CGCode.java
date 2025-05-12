import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int numGood = in.nextInt();
        int numBad = in.nextInt();
        for (int i = 0; i < numGood; i++) {
            String goodNoun = in.next();
        }
        for (int i = 0; i < numBad; i++) {
            String badNoun = in.next();
        }
        int numLines = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < numLines; i++) {
            String line = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("result");
    }
}