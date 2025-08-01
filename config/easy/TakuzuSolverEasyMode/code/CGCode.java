import java.util.*;
import java.io.*;
import java.math.*;

/**
 * Takuzu Solver (Easy mode)
 * No row or column may contain a sequence of three or more repeating digits
 * e.g. 1 1 0 is valid but 1 1 1 is invalid
 **/
class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < n; i++) {
            String row = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("Completed board");
    }
}