import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int width = in.nextInt();
        int height = in.nextInt();
        int players = in.nextInt();
        int doors = in.nextInt();
        int turns = in.nextInt();
        for (int i = 0; i < players; i++) {
            int rX = in.nextInt();
            int rY = in.nextInt();
        }
        for (int i = 0; i < doors; i++) {
            int coord = in.nextInt();
            String wall = in.next();
        }
        for (int i = 0; i < turns; i++) {
            int tX = in.nextInt();
            int tY = in.nextInt();
            String direction = in.next();
        }
        for (int i = 0; i < players; i++) {

            // Write an answer using System.out.println()
            // To debug: System.err.println("Debug messages...");

            System.out.println("answer");
        }
    }
}