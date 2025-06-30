#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int w;
    int h;
    int n;
    cin >> w >> h >> n; cin.ignore();
    string o;
    cin >> o; cin.ignore();
    for (int i = 0; i < h; i++) {
        string line;
        getline(cin, line);
    }
    for (int i = 0; i < n; i++) {
        string k;
        int x;
        int y;
        cin >> k >> x >> y; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}