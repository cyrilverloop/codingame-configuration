#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int g;
    int e;
    cin >> g >> e; cin.ignore();
    for (int i = 0; i < g; i++) {
        string group;
        getline(cin, group);
    }
    for (int i = 0; i < e; i++) {
        int event;
        cin >> event; cin.ignore();
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "answer" << endl;
}