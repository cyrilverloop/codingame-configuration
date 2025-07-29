import java.util.*;
import java.io.*;
import java.math.*;

class Solution {

    public static void main(String args[]) {
        Scanner in = new Scanner(System.in);
        int trainCars = in.nextInt();
        int numTickets = in.nextInt();
        int numRoutes = in.nextInt();
        int red = in.nextInt();
        int yellow = in.nextInt();
        int green = in.nextInt();
        int blue = in.nextInt();
        int white = in.nextInt();
        int black = in.nextInt();
        int orange = in.nextInt();
        int pink = in.nextInt();
        int engine = in.nextInt();
        for (int i = 0; i < numTickets; i++) {
            int points = in.nextInt();
            String cityA = in.next();
            String cityB = in.next();
        }
        for (int i = 0; i < numRoutes; i++) {
            int length = in.nextInt();
            int requiredEngines = in.nextInt();
            String color = in.next();
            String cityA = in.next();
            String cityB = in.next();
        }

        // Write an answer using System.out.println()
        // To debug: System.err.println("Debug messages...");

        System.out.println("points");
    }
}