#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int c;
    int n;
    int m;
    cin >> c >> n >> m; cin.ignore();
    for (int i = 0; i < c; i++) {
        int cow;
        cin >> cow; cin.ignore();
    }
    for (int i = 0; i < n; i++) {
        for (int j = 0; j < m; j++) {
            int square;
            cin >> square; cin.ignore();
        }
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}