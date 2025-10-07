#include <iostream>
#include <string>
#include <vector>
#include <algorithm>

using namespace std;

int main()
{
    int n;
    cin >> n; cin.ignore();
    string maze_size;
    getline(cin, maze_size);
    string starting_position;
    getline(cin, starting_position);
    string destination;
    getline(cin, destination);
    int b;
    cin >> b; cin.ignore();
    for (int i = 0; i < b; i++) {
        string obstacle;
        getline(cin, obstacle);
    }

    // Write an answer using cout. DON'T FORGET THE "<< endl"
    // To debug: cerr << "Debug messages..." << endl;

    cout << "42" << endl;
}