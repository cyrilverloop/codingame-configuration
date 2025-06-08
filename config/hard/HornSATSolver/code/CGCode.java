import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        String unsedP = in.next();
        String unsedCnf = in.next();
        int V = in.nextInt();
        int C = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < C; i++) {
            String clause = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("s UNSATISFIABLE");
    }
}