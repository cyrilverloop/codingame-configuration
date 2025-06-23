#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    string start;
    cin >> start; cin.ignore();
    for (int i = 0; i < n; i++) {
        string rule;
        getline(cin, rule);
    }
    int t;
    cin >> t; cin.ignore();
    for (int i = 0; i < t; i++) {
        string word;
        cin >> word; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "true" << endl;
}