#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int sw;
    int sh;
    cin >> sw >> sh; cin.ignore();
    for (int i = 0; i < sh; i++) {
        string srow;
        getline(cin, srow);
    }
    int fw;
    int fh;
    cin >> fw >> fh; cin.ignore();
    for (int i = 0; i < fh; i++) {
        string frow;
        getline(cin, frow);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}