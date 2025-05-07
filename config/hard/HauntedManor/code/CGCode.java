import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int vampireCount = in.nextInt();
        int zombieCount = in.nextInt();
        int ghostCount = in.nextInt();
        int size = in.nextInt();
        for (int i = 0; i < size; i++) {
            int canSeeFromTop = in.nextInt();
        }
        for (int i = 0; i < size; i++) {
            int canSeeFromBottom = in.nextInt();
        }
        for (int i = 0; i < size; i++) {
            int canSeeFromLeft = in.nextInt();
        }
        for (int i = 0; i < size; i++) {
            int canSeeFromRight = in.nextInt();
        }
        in.nextLine();
        for (int i = 0; i < size; i++) {
            String row = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("answer");
    }
}