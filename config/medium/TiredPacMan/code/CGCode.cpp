#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int w;
    int h;
    cin >> w >> h; cin.ignore();
    int energy;
    cin >> energy; cin.ignore();
    for (int i = 0; i < h; i++) {
        string row;
        getline(cin, row);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "score" << endl;
}