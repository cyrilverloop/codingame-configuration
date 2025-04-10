#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int l;
    cin >> l; cin.ignore();
    int h;
    cin >> h; cin.ignore();
    for (int i = 0; i < h; i++) {
        string row;
        getline(cin, row);
    }
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        int x;
        int y;
        cin >> x >> y; cin.ignore();
    }
    for (int i = 0; i < n; i++) {

        // Write an answer using cout. DON'T FORGET THE "<< endl"
        // To debug: cerr << "Debug messages..." << endl;

        cout << "answer" << endl;
    }
}