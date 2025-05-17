#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int c;
    cin >> c; cin.ignore();
    for (int i = 0; i < c; i++) {
        string name;
        getline(cin, name);
    }
    int v;
    cin >> v; cin.ignore();
    for (int i = 0; i < v; i++) {
        string votes;
        getline(cin, votes);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}