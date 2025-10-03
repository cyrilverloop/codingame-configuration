#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int r;
    int c;
    cin >> r >> c; cin.ignore();
    for (int i = 0; i < r; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "[][][]" << endl;
}