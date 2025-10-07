import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int n = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        String mazeSize = in.nextLine();
        String startingPosition = in.nextLine();
        String destination = in.nextLine();
        int b = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < b; i++) {
            String obstacle = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("42");
    }
}