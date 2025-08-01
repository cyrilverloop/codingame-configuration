#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

/**
 * Takuzu Solver (Easy mode)
 * No row or column may contain a sequence of three or more repeating digits
 * e.g. 1 1 0 is valid but 1 1 1 is invalid
 **/

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Completed board" << endl;
}