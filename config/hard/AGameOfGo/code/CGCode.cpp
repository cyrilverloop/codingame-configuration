#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int s; // the size of the board
    cin >> s; cin.ignore();
    int m; // the number of moves to be made
    cin >> m; cin.ignore();
    for (int i = 0; i < s; i++) {
        string row;
        getline(cin, row); // a single row in the input board
    }
    for (int i = 0; i < m; i++) {
        string move;
        getline(cin, move); // a strng representation of a move
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "NOT_VALID | <<the_board_after_the_moves>>" << endl;
}