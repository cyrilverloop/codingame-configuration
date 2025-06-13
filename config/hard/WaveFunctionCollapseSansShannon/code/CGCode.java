import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int W1 = in.nextInt();
        int H1 = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < H1; i++) {
            String ROW = in.nextLine();
        }
        int W2 = in.nextInt();
        int H2 = in.nextInt();
        if (in.hasNextLine()) {
            in.nextLine();
        }
        for (int i = 0; i < H2; i++) {
            String ROW = in.nextLine();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("+----------+");
        System.out.println("|          |");
        System.out.println("|  *       |");
        System.out.println("| \|    *  |");
        System.out.println("|  |/   |/ |");
        System.out.println("|  |    |  |");
        System.out.println("| \|    |  |");
        System.out.println("+----------+");
    }
}