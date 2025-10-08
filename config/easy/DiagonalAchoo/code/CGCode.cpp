#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    int g;
    cin >> g; cin.ignore();
    for (int i = 0; i < g; i++) {
        for (int j = 0; j < n; j++) {
            string row;
            getline(cin, row);
        }
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Index (starts from 0)" << endl;
    cout << "C.C." << endl;
    cout << ".C.C" << endl;
    cout << "C.H." << endl;
    cout << ".C.." << endl;
}