#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int h;
    int w;
    cin >> h >> w; cin.ignore();
    for (int i = 0; i < h; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Number of snowflakes" << endl;
    cout << "Number of unique snowflakes" << endl;
}