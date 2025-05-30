import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int S = in.nextInt(); // the size of the board
        int M = in.nextInt(); // the number of moves to be made
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < S; i++) {
            String row = in.nextLine(); // a single row in the input board
        }
        for (int i = 0; i < M; i++) {
            String move = in.nextLine(); // a strng representation of a move
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("NOT_VALID | <<the_board_after_the_moves>>");
    }
}