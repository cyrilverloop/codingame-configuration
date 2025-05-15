#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    for (int i = 0; i < n; i++) {
        string variables;
        cin >> variables; cin.ignore();
    }
    int m;
    cin >> m; cin.ignore();
    for (int i = 0; i < m; i++) {
        string equation;
        getline(cin, equation);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "Solved system" << endl;
}