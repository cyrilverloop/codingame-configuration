import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int nFiles = in.nextInt();
        for (int i = 0; i < nFiles; i++) {
            String preexistingFile = in.next();
            int fileTime = in.nextInt();
        }
        int nGoalTargets = in.nextInt();
        for (int i = 0; i < nGoalTargets; i++) {
            String goalTarget = in.next();
        }
        int nLines = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < nLines; i++) {
            String makefileLine = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("[Build complete]");
    }
}