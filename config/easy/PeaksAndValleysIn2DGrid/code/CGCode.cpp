#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int h;
    cin >> h; cin.ignore();
    for (int i = 0; i < h; i++) {
        string line;
        getline(cin, line);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Peak Coordinates or None" << endl;
    cout << "Valley Coordinates or None" << endl;
}